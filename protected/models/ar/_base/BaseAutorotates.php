<?php

/**
 * This is the model base class for the table "autorotates".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Autorotates".
 *
 * Columns in table "autorotates" available as properties of the model,
 * followed by relations of table "autorotates" available as properties of the model.
 *
 * @property integer $id
 * @property string $enabled
 * @property double $waittime
 * @property double $accel
 * @property double $speed
 * @property double $horizon
 * @property double $tofov
 *
 * @property Projects[] $projects
 */
abstract class BaseAutorotates extends BaseModel {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'autorotates';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Autorotates|Autorotates', $n);
	}

	public static function representingColumn() {
		return 'enabled';
	}

	public function rules() {
		return array(
			array('waittime, accel, speed, horizon, tofov', 'numerical'),
			array('enabled', 'length', 'max'=>5),
			array('enabled, waittime, accel, speed, horizon, tofov', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, enabled, waittime, accel, speed, horizon, tofov', 'safe', 'on'=>'search'),
			array('id, enabled, waittime, accel, speed, horizon, tofov', 'safe', 'on'=>'api'),
		);
	}

	public function relations() {
		return array(
			'projects' => array(self::HAS_MANY, 'Projects', 'autorotate_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'enabled' => Yii::t('app', 'Enabled'),
			'waittime' => Yii::t('app', 'Waittime'),
			'accel' => Yii::t('app', 'Accel'),
			'speed' => Yii::t('app', 'Speed'),
			'horizon' => Yii::t('app', 'Horizon'),
			'tofov' => Yii::t('app', 'Tofov'),
			'projects' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('enabled', $this->enabled, true);
		$criteria->compare('waittime', $this->waittime);
		$criteria->compare('accel', $this->accel);
		$criteria->compare('speed', $this->speed);
		$criteria->compare('horizon', $this->horizon);
		$criteria->compare('tofov', $this->tofov);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}