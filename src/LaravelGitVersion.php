<?php

namespace ConnorHowell\LaravelGitVersion;

class LaravelGitVersion {
    /**
     * Attempt to Retrieve Current Git Commit Hash in PHP.
     *
     * @return string|null
     */
    protected static function getCurrentGitCommitHash(): ?string
    {
        $path = base_path('.git/');

        if (! file_exists($path)) {
            return null;
        }

        $head = trim(substr(file_get_contents($path . 'HEAD'), 4));

        $hash = trim(file_get_contents(sprintf($path . $head)));

        return $hash;
    }

    /**
     * Retrieve the Git URL from the .git/config file.
     *
     * @return string|null
     */
    protected static function getGitUrl(): ?string
    {
        $path = base_path('.git/config');

        if (! file_exists($path)) {
            return null;
        }

        $config = file_get_contents($path);
        preg_match('/url\s*=\s*(.*)/', $config, $matches);

        // If we got a match but it's a @github.com URL, we need to convert it to a standard HTTPS URL
        if (isset($matches[1]) && preg_match('/^git@github\.com:(.+)\/(.+)\.git$/', $matches[1], $urlParts)) {
            $matches[1] = 'https://github.com/' . $urlParts[1] . '/' . $urlParts[2];
        }

        return $matches[1] ?? null;
    }

    /**
     * Get the URL of the current commit in the repository.
     *
     * @return string|null
     */
    public static function getCurrentCommitUrl(): ?string
    {
        $url = self::getGitUrl();
        $commitHash = self::getCurrentGitCommitHash();

        if ($url && $commitHash) {
            return rtrim($url, '/') . '/commit/' . $commitHash;
        }

        return null;
    }

    /**
     * Get version information including the current commit hash, repository URL, and commit URL.
     *
     * @return array
     */
    public static function getVersionInfo(): array
    {
        return [
            'version' => self::getCurrentGitCommitHash(),
            'repo' => self::getGitUrl(),
            'commit_url' => self::getCurrentCommitUrl(),
        ];
    }
}
