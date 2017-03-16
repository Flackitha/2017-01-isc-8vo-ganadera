<?php

/**
 * This is the model class for table "tbl_conceptos_acta".
 *
 * The followings are the available columns in table 'tbl_conceptos_acta':
 * @property integer $id
 * @property integer $acta_id
 * @property integer $concepto_id
 * @property integer $checkbox
 * @property string $observaciones
 *
 * The followings are the available model relations:
 * @property Acta $acta
 * @property Conceptos $concepto
 */
class ConceptoActa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_conceptos_acta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, acta_id, concepto_id', 'required'),
			array('id, acta_id, concepto_id, checkbox', 'numerical', 'integerOnly'=>true),
			array('observaciones', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, acta_id, concepto_id, checkbox, observaciones', 'safe', 'on'=>'search'),
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
			'acta' => array(self::BELONGS_TO, 'Acta', 'acta_id'),
			'concepto' => array(self::BELONGS_TO, 'Conceptos', 'concepto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'acta_id' => 'Acta',
			'concepto_id' => 'Concepto',
			'checkbox' => 'Checkbox',
			'observaciones' => 'Observaciones',
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
		$criteria->compare('acta_id',$this->acta_id);
		$criteria->compare('concepto_id',$this->concepto_id);
		$criteria->compare('checkbox',$this->checkbox);
		$criteria->compare('observaciones',$this->observaciones,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ConceptoActa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
