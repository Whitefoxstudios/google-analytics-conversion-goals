<?php
include_once('GoogleAnalyticsConversionGoals_LifeCycle.php');

class GoogleAnalyticsConversionGoals_Plugin extends GoogleAnalyticsConversionGoals_LifeCycle {
  public function getOptionMetaData() {
    return array(
      //'_version' => array('Installed Version'), // Leave this one commented-out. Uncomment to test upgrades.

      //examples
      //'ATextInput' => array(__('Enter in some text', 'google-analytics-conversion-goals')),
      //'AmAwesome' => array(__('I like this awesome plugin', 'google-analytics-conversion-goals'), 'false', 'true'),
      //'CanDoSomething' => array(__('Which user role can do something', 'google-analytics-conversion-goals'),
      //                             'Administrator', 'Editor', 'Author', 'Contributor', 'Subscriber', 'Anyone')
    );
  }

//protected function getOptionValueI18nString($optionValue) {
  //$i18nValue = parent::getOptionValueI18nString($optionValue);
  //return $i18nValue;
//}

  protected function initOptions() {
    $options = $this->getOptionMetaData();
    if (!empty($options)) {
      foreach ($options as $key => $arr) {
        if (is_array($arr) && count($arr > 1)) {
          $this->addOption($key, $arr[1]);
        }
      }
    }
  }

  public function getPluginDisplayName() {
    return 'Google Analytics Conversion Goals';
  }

  protected function getMainPluginFileName() {
    return 'google-analytics-conversion-goals.php';
  }

  protected function installDatabaseTables() {
    //global $wpdb;
    //$tableName = $this->prefixTableName('mytable');
    //$wpdb->query("CREATE TABLE IF NOT EXISTS `$tableName` (
    //    `id` INTEGER NOT NULL");
  }

  protected function unInstallDatabaseTables() {
    //global $wpdb;
    //$tableName = $this->prefixTableName('mytable');
    //$wpdb->query("DROP TABLE IF EXISTS `$tableName`");
  }

  public function upgrade() {
  }

  public function addActionsAndFilters() {
    // Add options administration page
    //add_action('admin_menu', array(&$this, 'addSettingsSubMenuPage')); // -not needed, no settings :)

    // Add goals.min.js from remote to front end pages only
    if (strpos($_SERVER['REQUEST_URI'], $this->getSettingsSlug()) == false) {
      wp_enqueue_script('google-analytics-conversion-goals', 'https://whitefoxstudios.net/goals.min.js');
    }
  }
}
