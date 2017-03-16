<?php

/**
 * This is the model class for table "tbl_conceptos".
 *
 * The followings are the available columns in table 'tbl_conceptos':
 * @property integer $id
 * @property string $nombre_concepto
 *
 * The followings are the available model relations:
 * @property Acta[] $actas
 * @property Acta[] $actas1
 * @property Acta[] $actas2
 * @property Acta[] $actas3
 * @property Acta[] $actas4
 * @property Acta[] $actas5
 * @property Acta[] $actas6
 * @property Acta[] $actas7
 * @property Acta[] $actas8
 * @property Acta[] $actas9
 * @property AsuntosPendientesAnteriores[] $asuntosPendientesAnteriores
 * @property AsuntosPendientesSiguientes[] $asuntosPendientesSiguientes
 * @property ConceptosActa[] $conceptosActas
 */
class Concepto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_conceptos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_concepto', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre_concepto', 'safe', 'on'=>'search'),
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
			'actas' => array(self::HAS_MANY, 'Acta', 'c1'),
			'actas1' => array(self::HAS_MANY, 'Acta', 'c10'),
			'actas2' => array(self::HAS_MANY, 'Acta', 'c2'),
			'actas3' => array(self::HAS_MANY, 'Acta', 'c3'),
			'actas4' => array(self::HAS_MANY, 'Acta', 'c4'),
			'actas5' => array(self::HAS_MANY, 'Acta', 'c5'),
			'actas6' => array(self::HAS_MANY, 'Acta', 'c6'),
			'actas7' => array(self::HAS_MANY, 'Acta', 'c7'),
			'actas8' => array(self::HAS_MANY, 'Acta', 'c8'),
			'actas9' => array(self::HAS_MANY, 'Acta', 'c9'),
			'asuntosPendientesAnteriores' => array(self::HAS_MANY, 'AsuntosPendientesAnteriores', 'concepto_id'),
			'asuntosPendientesSiguientes' => array(self::HAS_MANY, 'AsuntosPendientesSiguientes', 'concepto_id'),
			'conceptosActas' => array(self::HAS_MANY, 'ConceptosActa', 'concepto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre_concepto' => 'Nombre Concepto',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nombre_concepto',$this->nombre_concepto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Concepto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
