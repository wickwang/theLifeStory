<?php



/**
 * This class defines the structure of the 'setting_general' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class SettingGeneralTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.SettingGeneralTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('setting_general');
		$this->setPhpName('SettingGeneral');
		$this->setClassname('SettingGeneral');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('SYSTEM_EMAIL_SMTP_HOST', 'SystemEmailSmtpHost', 'VARCHAR', false, 255, null);
		$this->addColumn('SYSTEM_EMAIL_SMTP_PORT', 'SystemEmailSmtpPort', 'INTEGER', false, 11, null);
		$this->addColumn('SYSTEM_EMAIL_SMTP_USE_SSL', 'SystemEmailSmtpUseSsl', 'TINYINT', false, 4, null);
		$this->addColumn('SYSTEM_EMAIL_SMTP_USERNAME', 'SystemEmailSmtpUsername', 'VARCHAR', false, 255, null);
		$this->addColumn('SYSTEM_EMAIL_SMTP_PASSWORD', 'SystemEmailSmtpPassword', 'VARCHAR', false, 255, null);
		$this->addColumn('SYSTEM_EMAIL_FROM_ACCOUT', 'SystemEmailFromAccout', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // SettingGeneralTableMap
