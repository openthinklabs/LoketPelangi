<?php

/**
 * This is the model class for table "transaksi".
 *
 * The followings are the available columns in table 'transaksi':
 * @property string $id
 * @property string $tanggal
 * @property string $kode_pelanggan
 * @property string $nama_anonim
 * @property string $kode_divisi
 *
 * The followings are the available model relations:
 * @property Pelanggan $kodePelanggan
 * @property Divisi $kodeDivisi
 * @property TransaksiDetail[] $transaksiDetails 
 */
class Transaksi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Transaksi the static model class
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
		return 'transaksi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, tanggal, kode_pelanggan, kode_divisi', 'required'),
			array('id, nama_anonim', 'length', 'max'=>200),
			array('kode_pelanggan', 'length', 'max'=>100),
		    array('kode_divisi', 'length', 'max'=>12),
			array('tanggal', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, tanggal, kode_pelanggan, nama_anonim, kode_divisi', 'safe', 'on'=>'search'),
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
				'kodePelanggan' => array(self::BELONGS_TO, 'Pelanggan', 'kode_pelanggan'),
				'kodeDivisi' => array(self::BELONGS_TO, 'Divisi', 'kode_divisi'),
				'transaksiDetails' => array(self::HAS_MANY, 'TransaksiDetail', 'transaksi_id'),				
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'tanggal' => 'Tanggal',
			'kode_pelanggan' => 'Kode Pelanggan',
			'nama_anonim' => 'Nama Anonim',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('kode_pelanggan',$this->kode_pelanggan,true);
		$criteria->compare('nama_anonim',$this->nama_anonim,true);		
		$criteria->compare('kode_divisi',$this->kode_divisi,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function nextId() {
		$result = Yii::app()->db->createCommand()
		->select("MAX(SUBSTR(id,STRPOS(id,':')+1))::integer+1 AS next_id")
		->from('transaksi')
		->queryScalar();
	
		if($result == '') {
			$result = 1;
		}
	
		return $result ;
	}	
}