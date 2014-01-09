<?php

/**
 * This is the model class for table "lokasi".
 *
 * The followings are the available columns in table 'lokasi':
 * @property string $id
 * @property string $nama
 * @property string $root_id
 * @property integer $lft
 * @property integer $rgt
 * @property integer $level
 * @property string $created_at
 * @property string $updated_at
 *
 * The followings are the available model relations:
 * @property Pelanggan[] $pelanggans
 * 
 * @author Wildan Maulana, OpenThink Labs
 */
class Lokasi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lokasi the static model class
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
		return 'lokasi';
	}
	
	public function behaviors()
	{
		return array(
				'nestedSetBehavior'=>array(
						'class'=>'ext.yiiext.behaviors.model.trees.NestedSetBehavior',
						'rootAttribute'=>'root_id',
						'leftAttribute'=>'lft',
						'rightAttribute'=>'rgt',
						'levelAttribute'=>'level',
						'hasManyRoots'=>true
				),
		);
	}	
	
	public function __toString() {
		return $this->nama ;
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created_at, updated_at', 'required'),
			array('nama', 'length', 'max'=>255),
			array('root_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, root_id, lft, rgt, level, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'pelanggans' => array(self::HAS_MANY, 'Pelanggan', 'lokasi_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'root_id' => 'Root',
			'lft' => 'Lft',
			'rgt' => 'Rgt',
			'level' => 'Level',
			'created_at' => 'Created At',
			'updated_at' => 'Updated At',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('root_id',$this->root_id,true);
		$criteria->compare('lft',$this->lft);
		$criteria->compare('rgt',$this->rgt);
		$criteria->compare('level',$this->level);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}