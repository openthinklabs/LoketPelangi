<?php

/**
 * This is the model class for table "pelanggan".
 *
 * The followings are the available columns in table 'pelanggan':
 * @property string $kode_pelanggan
 * @property string $kode_salesman
 * @property string $kode_loket
 * @property string $kode_usaha
 * @property string $kode_pos
 * @property string $nama
 * @property string $nama_singkat
 * @property string $jalan
 * @property string $alamat_tagih
 * @property string $dtgl_masuk
 * @property string $attn
 * @property string $telepon
 * @property string $npwp
 * @property integer $term
 * @property string $status
 * @property integer $takakura_pinjaman
 * @property string $takakura_uang_jaminan
 * @property integer $tong_sampah_pinjaman
 * @property string $tong_sampah_uang_jaminan
 * @property string $telepon2
 * @property string $transfer
 * @property string $cetak_harga
 * @property string $pembayaran
 * @property string $negara_id
 * @property string $propinsi_id
 * @property string $kabkota_id
 * @property string $kecamatan_id
 * @property string $kelurahan_id
 * @property string $rw_id
 * @property string $rt_id
 *
 * The followings are the available model relations:
 * @property Wilayah $kodePos
 * @property Salesman $kodeSalesman
 * @property BidangUsaha $kodeUsaha
 * @property JenisBayar $pembayaran0
 * @property StatusPelanggan $status0
 * @property Lokasi $negara
 * @property Lokasi $propinsi
 * @property Lokasi $kabkota
 * @property Lokasi $kecamatan
 * @property Lokasi $kelurahan
 * @property Lokasi $rw
 * @property Lokasi $rt
 * @property Loket $kodeLoket
 * @property Kelompok[] $kelompoks
 */
class Pelanggan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pelanggan the static model class
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
		return 'pelanggan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, kode_loket, kode_usaha, kode_pos, negara_id, propinsi_id, kabkota_id, kecamatan_id, kelurahan_id, rw_id, rt_id', 'required'),
			array('term, takakura_pinjaman, tong_sampah_pinjaman', 'numerical', 'integerOnly'=>true),
			array('kode_pelanggan', 'length', 'max'=>100),
			array('kode_salesman', 'length', 'max'=>18),
			array('kode_loket', 'length', 'max'=>50),
			array('kode_usaha', 'length', 'max'=>12),
			array('kode_pos, takakura_uang_jaminan, tong_sampah_uang_jaminan', 'length', 'max'=>10),
			array('nama, jalan, alamat_tagih', 'length', 'max'=>200),
			array('nama_singkat', 'length', 'max'=>100),
			array('attn, telepon, npwp, telepon2', 'length', 'max'=>40),
			array('status, transfer, cetak_harga, pembayaran', 'length', 'max'=>2),
			array('dtgl_masuk, negara_id, propinsi_id, kabkota_id, kecamatan_id, kelurahan_id, rw_id, rt_id', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kode_pelanggan, kode_salesman, kode_loket, kode_usaha, kode_pos, nama, nama_singkat, jalan, alamat_tagih, dtgl_masuk, attn, telepon, npwp, term, status, takakura_pinjaman, takakura_uang_jaminan, tong_sampah_pinjaman, tong_sampah_uang_jaminan, telepon2, transfer, cetak_harga, pembayaran, negara_id, propinsi_id, kabkota_id, kecamatan_id, kelurahan_id, rw_id, rt_id', 'safe', 'on'=>'search'),
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
			'kodePos' => array(self::BELONGS_TO, 'Wilayah', 'kode_pos'),
			'kodeSalesman' => array(self::BELONGS_TO, 'Salesman', 'kode_salesman'),
			'kodeUsaha' => array(self::BELONGS_TO, 'BidangUsaha', 'kode_usaha'),
			'pembayaran0' => array(self::BELONGS_TO, 'JenisBayar', 'pembayaran'),
			'status0' => array(self::BELONGS_TO, 'StatusPelanggan', 'status'),
			'negara' => array(self::BELONGS_TO, 'Lokasi', 'negara_id'),
			'propinsi' => array(self::BELONGS_TO, 'Lokasi', 'propinsi_id'),
			'kabkota' => array(self::BELONGS_TO, 'Lokasi', 'kabkota_id'),
			'kecamatan' => array(self::BELONGS_TO, 'Lokasi', 'kecamatan_id'),
			'kelurahan' => array(self::BELONGS_TO, 'Lokasi', 'kelurahan_id'),
			'rw' => array(self::BELONGS_TO, 'Lokasi', 'rw_id'),
			'rt' => array(self::BELONGS_TO, 'Lokasi', 'rt_id'),
			'kodeLoket' => array(self::BELONGS_TO, 'Loket', 'kode_loket'),
			'kelompoks' => array(self::MANY_MANY, 'Kelompok', 'kelompok_pelanggan(kode_pelanggan, kelompok_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'kode_pelanggan' => 'Kode Pelanggan',
			'kode_salesman' => 'Kode Salesman',
			'kode_loket' => 'Kode Loket',
			'kode_usaha' => 'Kode Usaha',
			'kode_pos' => 'Kode Pos',
			'nama' => 'Nama',
			'nama_singkat' => 'Nama Singkat',
			'jalan' => 'Jalan',
			'alamat_tagih' => 'Alamat Tagih',
			'dtgl_masuk' => 'Dtgl Masuk',
			'attn' => 'Attn',
			'telepon' => 'Telepon',
			'npwp' => 'Npwp',
			'term' => 'Term',
			'status' => 'Status',
			'takakura_pinjaman' => 'Takakura Pinjaman',
			'takakura_uang_jaminan' => 'Takakura Uang Jaminan',
			'tong_sampah_pinjaman' => 'Tong Sampah Pinjaman',
			'tong_sampah_uang_jaminan' => 'Tong Sampah Uang Jaminan',
			'telepon2' => 'Telepon2',
			'transfer' => 'Transfer',
			'cetak_harga' => 'Cetak Harga',
			'pembayaran' => 'Pembayaran',
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

		$criteria->compare('kode_pelanggan',$this->kode_pelanggan,true);
		$criteria->compare('kode_salesman',$this->kode_salesman,true);
		$criteria->compare('kode_loket',$this->kode_loket,true);
		$criteria->compare('kode_usaha',$this->kode_usaha,true);
		$criteria->compare('kode_pos',$this->kode_pos,true);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('nama_singkat',$this->nama_singkat,true);
		$criteria->compare('jalan',$this->jalan,true);
		$criteria->compare('alamat_tagih',$this->alamat_tagih,true);
		$criteria->compare('dtgl_masuk',$this->dtgl_masuk,true);
		$criteria->compare('attn',$this->attn,true);
		$criteria->compare('telepon',$this->telepon,true);
		$criteria->compare('npwp',$this->npwp,true);
		$criteria->compare('term',$this->term);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('takakura_pinjaman',$this->takakura_pinjaman);
		$criteria->compare('takakura_uang_jaminan',$this->takakura_uang_jaminan,true);
		$criteria->compare('tong_sampah_pinjaman',$this->tong_sampah_pinjaman);
		$criteria->compare('tong_sampah_uang_jaminan',$this->tong_sampah_uang_jaminan,true);
		$criteria->compare('telepon2',$this->telepon2,true);
		$criteria->compare('transfer',$this->transfer,true);
		$criteria->compare('cetak_harga',$this->cetak_harga,true);
		$criteria->compare('pembayaran',$this->pembayaran,true);
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
	
	public function nextKodePelanggan() {
		$result = Yii::app()->db->createCommand()
		           ->select("MAX(SUBSTR(kode_pelanggan,STRPOS(kode_pelanggan,':')+1))::integer+1 AS next_id_pelanggan")
		           ->from('pelanggan')
		           ->queryScalar(); 
		
		if($result == '') {
			$result = 1; 
		}
		
		return $result ;
	}
}