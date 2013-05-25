<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $id
 * @property string $username
 * @property string $email
 * @property string $nama_lengkap
 * @property string $password
 * @property string $kode_loket
 *
 * The followings are the available model relations:
 * @property Loket $kodeLoket
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, username, nama_lengkap, kode_loket, email', 'required'),
			array('id, username, kode_loket', 'length', 'max'=>50),
			array('email', 'length', 'max'=>100),
			array('nama_lengkap, password', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, email, nama_lengkap, password, kode_loket', 'safe', 'on'=>'search'),
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
			'kodeLoket' => array(self::BELONGS_TO, 'Loket', 'kode_loket'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'email' => 'Email',
			'nama_lengkap' => 'Nama Lengkap',
			'password' => 'Password',
			'kode_loket' => 'Kode Loket',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nama_lengkap',$this->nama_lengkap,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('kode_loket',$this->kode_loket,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function nextId() {
		$result = Yii::app()->db->createCommand()
		->select("MAX(SUBSTR(id,STRPOS(id,':')+1))::integer+1 AS next_userid")
		->from('users')
		->queryScalar();
	
		if($result == '') {
			$result = 1;
		}
	
		return $result ;
	}	
}