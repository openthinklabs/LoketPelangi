<?php

/**
 * This is the model class for table "loket".
 *
 * The followings are the available columns in table 'loket':
 * @property string $kode_loket
 * @property string $keterangan
 * @property string $alamat
 * @property string $telepon
 * @property string $telepon2
 * @property string $fax
 * @property string $email
 * @property string $kontak
 * @property integer $inactive
 *
 * The followings are the available model relations:
 * @property Pelanggan[] $pelanggans
 * @property Salesman[] $salesmen
 */
class Loket extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Loket the static model class
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
		return 'loket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alamat, telepon, telepon2, fax, email, kontak, inactive', 'required'),
			array('inactive', 'numerical', 'integerOnly'=>true),
			array('kode_loket', 'length', 'max'=>3),
			array('keterangan', 'length', 'max'=>50),
			array('alamat', 'length', 'max'=>255),
			array('telepon, telepon2, fax', 'length', 'max'=>30),
			array('email', 'length', 'max'=>100),
			array('kontak', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_loket, keterangan, alamat, telepon, telepon2, fax, email, kontak, inactive', 'safe', 'on'=>'search'),
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
			'pelanggans' => array(self::HAS_MANY, 'Pelanggan', 'kode_loket'),
			'salesmen' => array(self::HAS_MANY, 'Salesman', 'kode_loket'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_loket' => 'Kode Loket',
			'keterangan' => 'Keterangan',
			'alamat' => 'Alamat',
			'telepon' => 'Telepon',
			'telepon2' => 'Telepon2',
			'fax' => 'Fax',
			'email' => 'Email',
			'kontak' => 'Kontak',
			'inactive' => 'Inactive',
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

		$criteria->compare('kode_loket',$this->kode_loket,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('telepon2',$this->telepon2,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('kontak',$this->kontak,true);
		$criteria->compare('inactive',$this->inactive);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}