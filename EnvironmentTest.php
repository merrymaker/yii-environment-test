<?php
namespace stalavitski\YiiEnvironmentTest;

/**
 * @name EnvironmentTest
 * @author Artsem Stalavitski
 *
 * Simple class used to set configuration and debugging depending on environment.
 * Using this you can predefine configurations for use in different environments,
 * like _development, testing, staging and production_.
 *
 * Class EnvironmentCustom
 * @package stalavitski\YiiTestEnvironment
 */
class EnvironmentTest extends \marcovtwout\YiiEnvironment\Environment
{
    /**
     * Set config dir.
     * @param string $configDir
     */
    protected function setConfigDir($configDir)
    {
        if ($configDir !== null) {
            $this->configDir = rtrim($configDir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
        } else {
            $this->configDir = __DIR__ . '/../../config/';
        }
    }
}
