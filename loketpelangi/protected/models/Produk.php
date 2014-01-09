<?php

/**
 * This is the model class for table "produk".
 *
 * The followings are the available columns in table 'produk':
 * @property integer $kode_produk
 * @property string $nama
 * @property string $keterangan
 * @property string $kode_divisi
 * 
 * The followings are the available model relations:
 * @property Divisi $kodeDivisi
 * @property TransaksiDetail[] $transaksiDetails
 * 
 * @author Wildan Maulana, OpenThink Labs
 */
class Produk extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Produk the static model class
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
		return 'produk';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama', 'length', 'max'=>200),
			array('keterangan', 'length', 'max'=>255),
			array('kode_divisi', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_produk, nama, keterangan, kode_divisi', 'safe', 'on'=>'search'),
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
			'kodeDivisi' => array(self::BELONGS_TO, 'Divisi', 'kode_divisi'),
			'transaksiDetails' => array(self::HAS_MANY, 'TransaksiDetail', 'kode_produk'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_produk' => 'Kode Produk',
			'nama' => 'Nama',
			'keterangan' => 'Keterangan',
			'kode_divisi' => 'Kode Divisi',
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

		$criteria->compare('kode_produk',$this->kode_produk);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('kode_divisi',$this->kode_divisi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}