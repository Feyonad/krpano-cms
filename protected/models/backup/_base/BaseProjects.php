<?php

/**
 * This is the model base class for the table "projects".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Projects".
 *
 * Columns in table "projects" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $keywords
 * @property integer $user_id
 * @property integer $theme_id
 * @property integer $default_location_id
 * @property integer $progress_id
 * @property integer $autorotate_id
 * @property integer $control_id
 * @property integer $display_id
 * @property integer $memory_id
 * @property integer $network_id
 *
 */
abstract class BaseProjects extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'projects';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Projects|Projects', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('description, keywords', 'required'),
			array('user_id, theme_id, default_location_id, progress_id, autorotate_id, control_id, display_id, memory_id, network_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('name, user_id, theme_id, default_location_id, progress_id, autorotate_id, control_id, display_id, memory_id, network_id', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, description, keywords, user_id, theme_id, default_location_id, progress_id, autorotate_id, control_id, display_id, memory_id, network_id', 'safe', 'on'=>'search'),
			array('id, name, description, keywords, user_id, theme_id, default_location_id, progress_id, autorotate_id, control_id, display_id, memory_id, network_id', 'safe', 'on'=>'api'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'description' => Yii::t('app', 'Description'),
			'keywords' => Yii::t('app', 'Keywords'),
			'user_id' => Yii::t('app', 'User'),
			'theme_id' => Yii::t('app', 'Theme'),
			'default_location_id' => Yii::t('app', 'Default Location'),
			'progress_id' => Yii::t('app', 'Progress'),
			'autorotate_id' => Yii::t('app', 'Autorotate'),
			'control_id' => Yii::t('app', 'Control'),
			'display_id' => Yii::t('app', 'Display'),
			'memory_id' => Yii::t('app', 'Memory'),
			'network_id' => Yii::t('app', 'Network'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('keywords', $this->keywords, true);
		$criteria->compare('user_id', $this->user_id);
		$criteria->compare('theme_id', $this->theme_id);
		$criteria->compare('default_location_id', $this->default_location_id);
		$criteria->compare('progress_id', $this->progress_id);
		$criteria->compare('autorotate_id', $this->autorotate_id);
		$criteria->compare('control_id', $this->control_id);
		$criteria->compare('display_id', $this->display_id);
		$criteria->compare('memory_id', $this->memory_id);
		$criteria->compare('network_id', $this->network_id);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}