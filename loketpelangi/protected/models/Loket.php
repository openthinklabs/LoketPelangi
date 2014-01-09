<?php

/**
 * This is the model class for table "loket".
 *
 * The followings are the available columns in table 'loket':
 * @property string $kode_loket
 * @property string $keterangan
 * @property string $jalan
 * @property string $telepon
 * @property string $telepon2
 * @property string $fax
 * @property string $email
 * @property string $kontak
 * @property integer $inactive
 * @property string $negara_id
 * @property string $propinsi_id
 * @property string $kabkota_id
 * @property string $kecamatan_id
 * @property string $kelurahan_id
 * @property string $rw_id
 * @property string $rt_id
 *
 * The followings are the available model relations:
 * @property Lokasi $kabkota
 * @property Lokasi $kecamatan
 * @property Lokasi $kelurahan
 * @property Lokasi $negara
 * @property Lokasi $propinsi
 * @property Salesman[] $salesmen
 * @property Pelanggan[] $pelanggans
 * 
 * @author Wildan Maulana, OpenThink Labs
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
			array('jalan, email, kontak', 'required'),
			array('inactive', 'numerical', 'integerOnly'=>true),
			array('kode_loket', 'length', 'max'=>50),
			array('keterangan', 'length', 'max'=>100),
			array('jalan', 'length', 'max'=>510),
			array('telepon, telepon2, fax', 'length', 'max'=>60),
			array('email', 'length', 'max'=>200),
			array('kontak', 'length', 'max'=>20),
			array('negara_id, propinsi_id, kabkota_id, kecamatan_id, kelurahan_id, rw_id, rt_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_loket, keterangan, jalan, telepon, telepon2, fax, email, kontak, inactive, negara_id, propinsi_id, kabkota_id, kecamatan_id, kelurahan_id, rw_id, rt_id', 'safe', 'on'=>'search'),
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
			'kabkota' => array(self::BELONGS_TO, 'Lokasi', 'kabkota_id'),
			'kecamatan' => array(self::BELONGS_TO, 'Lokasi', 'kecamatan_id'),
			'kelurahan' => array(self::BELONGS_TO, 'Lokasi', 'kelurahan_id'),
			'negara' => array(self::BELONGS_TO, 'Lokasi', 'negara_id'),
			'propinsi' => array(self::BELONGS_TO, 'Lokasi', 'propinsi_id'),
			'salesmen' => array(self::HAS_MANY, 'Salesman', 'kode_loket'),
			'pelanggans' => array(self::HAS_MANY, 'Pelanggan', 'kode_loket'),
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
			'jalan' => 'Jalan',
			'telepon' => 'Telepon',
			'telepon2' => 'Telepon2',
			'fax' => 'Fax',
			'email' => 'Email',
			'kontak' => 'Kontak',
			'inactive' => 'Inactive',
			'negara_id' => 'Negara',
			'propinsi_id' => 'Propinsi',
			'kabkota_id' => 'Kabkota',
			'kecamatan_id' => 'Kecamatan',
			'kelurahan_id' => 'Kelurahan',
			'rw_id' => 'Rw',
			'rt_id' => 'Rt',
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
		$criteria->compare('jalan',$this->jalan,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('telepon2',$this->telepon2,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('kontak',$this->kontak,true);
		$criteria->compare('inactive',$this->inactive);
		$criteria->compare('negara_id',$this->negara_id,true);
		$criteria->compare('propinsi_id',$this->propinsi_id,true);
		$criteria->compare('kabkota_id',$this->kabkota_id,true);
		$criteria->compare('kecamatan_id',$this->kecamatan_id,true);
		$criteria->compare('kelurahan_id',$this->kelurahan_id,true);
		$criteria->compare('rw_id',$this->rw_id,true);
		$criteria->compare('rt_id',$this->rt_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}