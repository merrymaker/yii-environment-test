<?php
namespace stalavitski\YiiEnvironmentTest;

/**
 * @name EnvironmentTest
 * @author Artsem Stalavitski
 *
 * Extension of \marcovtwout\YiiEnvironment\Environment class
 * @link https://github.com/marcovtwout/yii-environment by @author Marco van 't Wout
 * Added separated configs: configTest and configTestBootstrap for unit and functional testing
 *
 * Class EnvironmentTest
 * @package stalavitski\YiiTestEnvironment
 */
class EnvironmentTest extends \marcovtwout\YiiEnvironment\Environment
{
    /**
     * @var array web config array
     */
    public $configTest;

    /**
     * @var array console config array
     */
    public $configTestBootstrap;

    /**
     * Sets the environment and configuration for the selected mode.
     */
    protected function setEnvironment()
    {
        $config = $this->getConfig();
        parent::setEnvironment();

        if(isset($config['configTest'])) {
            $this->configTest = $config['configTest'];
            $this->configTest['params']['environment'] = strtolower($this->mode);
        } else {
            $this->configTest = $this->configWeb;
        }

        if(isset($config['configTestBootstrap'])) {
            $this->configTestBootstrap = $config['configTestBootstrap'];
            $this->configTestBootstrap['params']['environment'] = strtolower($this->mode);
        } else {
            $this->configTestBootstrap = $this->configConsole;
        }
    }
}
