<?php
/**
 * This is the model class for table "kelompok_pelanggan".
 *
 * The followings are the available columns in table 'kelompok_pelanggan':
 * @property string $kode_pelanggan
 * @property integer $kelompok_id
 * 
 * @author Wildan Maulana, OpenThink Labs
 */
class KelompokPelanggan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KelompokPelanggan the static model class
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
		return 'kelompok_pelanggan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kelompok_id', 'numerical', 'integerOnly'=>true),
			array('kode_pelanggan', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_pelanggan, kelompok_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_pelanggan' => 'Kode Pelanggan',
			'kelompok_id' => 'Kelompok',
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

		$criteria->compare('kode_pelanggan',$this->kode_pelanggan,true);
		$criteria->compare('kelompok_id',$this->kelompok_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}