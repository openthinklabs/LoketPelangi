<?php

/**
 * This is the model class for table "wilayah".
 *
 * The followings are the available columns in table 'wilayah':
 * @property string $kode_pos
 * @property string $keterangan
 * @property double $latitude
 * @property double $longitude
 * @property string $transfer
 *
 * The followings are the available model relations:
 * @property Pelanggan[] $pelanggans
 * 
 * @author Wildan Maulana, OpenThink Labs
 */
class Wilayah extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Wilayah the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'wilayah';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('latitude, longitude', 'required'),
			array('latitude, longitude', 'numerical'),
			array('kode_pos', 'length', 'max'=>5),
			array('transfer', 'length', 'max'=>1),
			array('keterangan', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_pos, keterangan, latitude, longitude, transfer', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'pelanggans' => array(self::HAS_MANY, 'Pelanggan', 'kode_pos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_pos' => 'Kode Pos',
			'keterangan' => 'Keterangan',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'transfer' => 'Transfer',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('kode_pos',$this->kode_pos,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('transfer',$this->transfer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}