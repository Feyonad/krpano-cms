<?php

/**
 * This is the model base class for the table "images".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Images".
 *
 * Columns in table "images" available as properties of the model,
 * followed by relations of table "images" available as properties of the model.
 *
 * @property integer $id
 * @property string $type
 * @property string $url
 * @property string $directory
 * @property string $setview
 * @property double $hfov
 * @property double $vfov
 * @property double $voffset
 * @property string $multires
 * @property integer $tilesize
 * @property string $progressive
 * @property string $prealign
 * @property integer $frames
 * @property integer $frame
 * @property string $urlprefix
 * @property integer $tiledimagewidth
 * @property integer $tiledimageheight
 * @property integer $baseindex
 * @property string $tiled
 * @property double $multiresthreshold
 * @property integer $levels
 * @property integer $levelsteps
 * @property integer $leveldetails
 * @property string $leveldownload
 * @property string $leveldecode
 * @property string $levelaspreview
 * @property string $urlsuffix
 *
 * @property Locations[] $locations
 */
abstract class BaseImages extends BaseModel {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'images';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Images|Images', $n);
	}

	public static function representingColumn() {
		return 'type';
	}

	public function rules() {
		return array(
			array('tilesize, frames, frame, tiledimagewidth, tiledimageheight, baseindex, levels, levelsteps, leveldetails', 'numerical', 'integerOnly'=>true),
			array('hfov, vfov, voffset, multiresthreshold', 'numerical'),
			array('type', 'length', 'max'=>9),
			array('url', 'length', 'max'=>200),
			array('directory, prealign, urlprefix, levelaspreview, urlsuffix', 'length', 'max'=>50),
			array('setview, multires, progressive, tiled', 'length', 'max'=>5),
			array('leveldownload, leveldecode', 'length', 'max'=>4),
			array('type, url, directory, setview, hfov, vfov, voffset, multires, tilesize, progressive, prealign, frames, frame, urlprefix, tiledimagewidth, tiledimageheight, baseindex, tiled, multiresthreshold, levels, levelsteps, leveldetails, leveldownload, leveldecode, levelaspreview, urlsuffix', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, type, url, directory, setview, hfov, vfov, voffset, multires, tilesize, progressive, prealign, frames, frame, urlprefix, tiledimagewidth, tiledimageheight, baseindex, tiled, multiresthreshold, levels, levelsteps, leveldetails, leveldownload, leveldecode, levelaspreview, urlsuffix', 'safe', 'on'=>'search'),
			array('id, type, url, directory, setview, hfov, vfov, voffset, multires, tilesize, progressive, prealign, frames, frame, urlprefix, tiledimagewidth, tiledimageheight, baseindex, tiled, multiresthreshold, levels, levelsteps, leveldetails, leveldownload, leveldecode, levelaspreview, urlsuffix', 'safe', 'on'=>'api'),
		);
	}

	public function relations() {
		return array(
			'locations' => array(self::HAS_MANY, 'Locations', 'image_id'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'type' => Yii::t('app', 'Type'),
			'url' => Yii::t('app', 'Url'),
			'directory' => Yii::t('app', 'Directory'),
			'setview' => Yii::t('app', 'Setview'),
			'hfov' => Yii::t('app', 'Hfov'),
			'vfov' => Yii::t('app', 'Vfov'),
			'voffset' => Yii::t('app', 'Voffset'),
			'multires' => Yii::t('app', 'Multires'),
			'tilesize' => Yii::t('app', 'Tilesize'),
			'progressive' => Yii::t('app', 'Progressive'),
			'prealign' => Yii::t('app', 'Prealign'),
			'frames' => Yii::t('app', 'Frames'),
			'frame' => Yii::t('app', 'Frame'),
			'urlprefix' => Yii::t('app', 'Urlprefix'),
			'tiledimagewidth' => Yii::t('app', 'Tiledimagewidth'),
			'tiledimageheight' => Yii::t('app', 'Tiledimageheight'),
			'baseindex' => Yii::t('app', 'Baseindex'),
			'tiled' => Yii::t('app', 'Tiled'),
			'multiresthreshold' => Yii::t('app', 'Multiresthreshold'),
			'levels' => Yii::t('app', 'Levels'),
			'levelsteps' => Yii::t('app', 'Levelsteps'),
			'leveldetails' => Yii::t('app', 'Leveldetails'),
			'leveldownload' => Yii::t('app', 'Leveldownload'),
			'leveldecode' => Yii::t('app', 'Leveldecode'),
			'levelaspreview' => Yii::t('app', 'Levelaspreview'),
			'urlsuffix' => Yii::t('app', 'Urlsuffix'),
			'locations' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('type', $this->type, true);
		$criteria->compare('url', $this->url, true);
		$criteria->compare('directory', $this->directory, true);
		$criteria->compare('setview', $this->setview, true);
		$criteria->compare('hfov', $this->hfov);
		$criteria->compare('vfov', $this->vfov);
		$criteria->compare('voffset', $this->voffset);
		$criteria->compare('multires', $this->multires, true);
		$criteria->compare('tilesize', $this->tilesize);
		$criteria->compare('progressive', $this->progressive, true);
		$criteria->compare('prealign', $this->prealign, true);
		$criteria->compare('frames', $this->frames);
		$criteria->compare('frame', $this->frame);
		$criteria->compare('urlprefix', $this->urlprefix, true);
		$criteria->compare('tiledimagewidth', $this->tiledimagewidth);
		$criteria->compare('tiledimageheight', $this->tiledimageheight);
		$criteria->compare('baseindex', $this->baseindex);
		$criteria->compare('tiled', $this->tiled, true);
		$criteria->compare('multiresthreshold', $this->multiresthreshold);
		$criteria->compare('levels', $this->levels);
		$criteria->compare('levelsteps', $this->levelsteps);
		$criteria->compare('leveldetails', $this->leveldetails);
		$criteria->compare('leveldownload', $this->leveldownload, true);
		$criteria->compare('leveldecode', $this->leveldecode, true);
		$criteria->compare('levelaspreview', $this->levelaspreview, true);
		$criteria->compare('urlsuffix', $this->urlsuffix, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}