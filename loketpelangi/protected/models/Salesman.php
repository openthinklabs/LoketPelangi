<?php

/**
 * This is the model class for table "salesman".
 *
 * The followings are the available columns in table 'salesman':
 * @property string $kode_salesman
 * @property string $kode_loket
 * @property string $nama
 * @property string $transfer
 * @property string $alamat
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Pelanggan[] $pelanggans
 * @property Loket $kodeLoket
 * 
 * @author Wildan Maulana, OpenThink Labs
 */
class Salesman extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Salesman the static model class
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
		return 'salesman';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_loket', 'required'),
			array('kode_salesman', 'length', 'max'=>9),
			array('kode_loket', 'length', 'max'=>50),
			array('nama', 'length', 'max'=>30),
			array('transfer, status', 'length', 'max'=>1),
			array('alamat', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_salesman, kode_loket, nama, transfer, alamat, status', 'safe', 'on'=>'search'),
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
			'pelanggans' => array(self::HAS_MANY, 'Pelanggan', 'kode_salesman'),
			'kodeLoket' => array(self::BELONGS_TO, 'Loket', 'kode_loket'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_salesman' => 'Kode Salesman',
			'kode_loket' => 'Kode Loket',
			'nama' => 'Nama',
			'transfer' => 'Transfer',
			'alamat' => 'Alamat',
			'status' => 'Status',
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

		$criteria->compare('kode_salesman',$this->kode_salesman,true);
		$criteria->compare('kode_loket',$this->kode_loket,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('transfer',$this->transfer,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}