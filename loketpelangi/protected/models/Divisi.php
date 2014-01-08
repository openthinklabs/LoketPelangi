<?php

/**
 * This is the model class for table "divisi".
 *
 * The followings are the available columns in table 'divisi':
 * @property string $kode_divisi
 * @property string $keterangan
 * @property string $detail
 * @property string $transfer
 *
 * The followings are the available model relations:
 * @property Produk[] $produks
 */
class Divisi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Divisi the static model class
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
		return 'divisi';
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
			array('kode_divisi', 'length', 'max'=>12),
			array('keterangan', 'length', 'max'=>100),
			array('detail, transfer', 'length', 'max'=>2),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_divisi, keterangan, detail, transfer', 'safe', 'on'=>'search'),
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
			'produks' => array(self::HAS_MANY, 'Produk', 'kode_divisi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_divisi' => 'Kode Divisi',
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

		$criteria->compare('kode_divisi',$this->kode_divisi,true);
		$criteria->compare('keterangan',$this->keterangan,true);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('transfer',$this->transfer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}