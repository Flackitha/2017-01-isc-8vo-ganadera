<?php

/**
 * This is the model class for table "tbl_acta".
 *
 * The followings are the available columns in table 'tbl_acta':
 * @property integer $id
 * @property integer $c1
 * @property integer $c2
 * @property integer $c3
 * @property integer $c4
 * @property integer $c5
 * @property integer $c6
 * @property integer $c7
 * @property integer $c8
 * @property integer $c9
 * @property integer $c10
 * @property string $fecha
 * @property integer $numero
 * @property integer $año
 *
 * The followings are the available model relations:
 * @property Conceptos $c11
 * @property Conceptos $c100
 * @property Conceptos $c20
 * @property Conceptos $c30
 * @property Conceptos $c40
 * @property Conceptos $c50
 * @property Conceptos $c60
 * @property Conceptos $c70
 * @property Conceptos $c80
 * @property Conceptos $c90
 * @property AsuntosPendientesAnteriores[] $asuntosPendientesAnteriores
 * @property AsuntosPendientesSiguientes[] $asuntosPendientesSiguientes
 * @property ConceptosActa[] $conceptosActas
 */
class Acta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_acta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, numero, año', 'required'),
			array('c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, numero, año', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, fecha, numero, año', 'safe', 'on'=>'search'),
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
			'c11' => array(self::BELONGS_TO, 'Conceptos', 'c1'),
			'c100' => array(self::BELONGS_TO, 'Conceptos', 'c10'),
			'c20' => array(self::BELONGS_TO, 'Conceptos', 'c2'),
			'c30' => array(self::BELONGS_TO, 'Conceptos', 'c3'),
			'c40' => array(self::BELONGS_TO, 'Conceptos', 'c4'),
			'c50' => array(self::BELONGS_TO, 'Conceptos', 'c5'),
			'c60' => array(self::BELONGS_TO, 'Conceptos', 'c6'),
			'c70' => array(self::BELONGS_TO, 'Conceptos', 'c7'),
			'c80' => array(self::BELONGS_TO, 'Conceptos', 'c8'),
			'c90' => array(self::BELONGS_TO, 'Conceptos', 'c9'),
			'asuntosPendientesAnteriores' => array(self::HAS_MANY, 'AsuntosPendientesAnteriores', 'acta_id'),
			'asuntosPendientesSiguientes' => array(self::HAS_MANY, 'AsuntosPendientesSiguientes', 'acta_id'),
			'conceptosActas' => array(self::HAS_MANY, 'ConceptosActa', 'acta_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'c1' => 'C1',
			'c2' => 'C2',
			'c3' => 'C3',
			'c4' => 'C4',
			'c5' => 'C5',
			'c6' => 'C6',
			'c7' => 'C7',
			'c8' => 'C8',
			'c9' => 'C9',
			'c10' => 'C10',
			'fecha' => 'Fecha',
			'numero' => 'Número',
			'año' => 'Año',
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
		$criteria->compare('c1',$this->c1);
		$criteria->compare('c2',$this->c2);
		$criteria->compare('c3',$this->c3);
		$criteria->compare('c4',$this->c4);
		$criteria->compare('c5',$this->c5);
		$criteria->compare('c6',$this->c6);
		$criteria->compare('c7',$this->c7);
		$criteria->compare('c8',$this->c8);
		$criteria->compare('c9',$this->c9);
		$criteria->compare('c10',$this->c10);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('año',$this->año);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Acta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
