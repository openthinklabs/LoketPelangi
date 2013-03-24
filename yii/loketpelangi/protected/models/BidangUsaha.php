<?php

/**
 * This is the model class for table "bidang_usaha".
 *
 * The followings are the available columns in table 'bidang_usaha':
 * @property string $kode_usaha
 * @property string $keterangan
 * @property string $detail
 * @property string $transfer
 *
 * The followings are the available model relations:
 * @property Pelanggan[] $pelanggans
 */
class BidangUsaha extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BidangUsaha the static model class
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
		return 'bidang_usaha';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('keterangan', 'required'),
			array('kode_usaha', 'length', 'max'=>6),
			array('keterangan', 'length', 'max'=>50),
			array('detail, transfer', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_usaha, keterangan, detail, transfer', 'safe', 'on'=>'search'),
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
			'pelanggans' => array(self::HAS_MANY, 'Pelanggan', 'kode_usaha'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_usaha' => 'Kode Usaha',
			'keterangan' => 'Keterangan',
			'detail' => 'Detail',
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

		$criteria->compare('kode_usaha',$this->kode_usaha,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('transfer',$this->transfer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}