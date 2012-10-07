<?php

/**
 * This is the model base class for the table "themes".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Themes".
 *
 * Columns in table "themes" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $favicon
 *
 */
abstract class BaseThemes extends BaseModel {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'themes';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Themes|Themes', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>10),
			array('favicon', 'length', 'max'=>100),
			array('user_id, name, favicon', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, user_id, name, favicon', 'safe', 'on'=>'search'),
			array('id, user_id, name, favicon', 'safe', 'on'=>'api'),
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
			'user_id' => Yii::t('app', 'User'),
			'name' => Yii::t('app', 'Name'),
			'favicon' => Yii::t('app', 'Favicon'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('user_id', $this->user_id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('favicon', $this->favicon, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}