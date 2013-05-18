<?php

/**
 * This is the model class for table "transaksi_detail".
 *
 * The followings are the available columns in table 'transaksi_detail':
 * @property string $id
 * @property string $transaksi_id
 * @property integer $kode_produk
 * @property double $qty
 * @property double $harga
 *
 * The followings are the available model relations:
 * @property Produk $kodeProduk
 * @property Transaksi $transaksi
 */
class TransaksiDetail extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TransaksiDetail the static model class
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
		return 'transaksi_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('kode_produk', 'numerical', 'integerOnly'=>true),
			array('qty, harga', 'numerical'),
			array('id, transaksi_id', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, transaksi_id, kode_produk, qty, harga', 'safe', 'on'=>'search'),
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
			'kodeProduk' => array(self::BELONGS_TO, 'Produk', 'kode_produk'),
			'transaksi' => array(self::BELONGS_TO, 'Transaksi', 'transaksi_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'transaksi_id' => 'Transaksi',
			'kode_produk' => 'Kode Produk',
			'qty' => 'Qty',
			'harga' => 'Harga',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('transaksi_id',$this->transaksi_id,true);
		$criteria->compare('kode_produk',$this->kode_produk);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('harga',$this->harga);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}