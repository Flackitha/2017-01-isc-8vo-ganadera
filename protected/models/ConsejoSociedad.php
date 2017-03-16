<?php

/**
 * This is the model class for table "tbl_consejo_sociedad".
 *
 * The followings are the available columns in table 'tbl_consejo_sociedad':
 * @property integer $id
 * @property integer $sociedad_id
 * @property string $nombre
 * @property string $domicilio
 *
 * The followings are the available model relations:
 * @property SociosPersonaMoral $sociedad
 */
class ConsejoSociedad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_consejo_sociedad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sociedad_id, nombre, domicilio', 'required'),
			array('sociedad_id', 'numerical', 'integerOnly'=>true),
			array('nombre, domicilio', 'length', 'max'=>180),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, sociedad_id, nombre, domicilio', 'safe', 'on'=>'search'),
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
			'sociedad' => array(self::BELONGS_TO, 'SociosPersonaMoral', 'sociedad_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sociedad_id' => 'Sociedad',
			'nombre' => 'Nombre',
			'domicilio' => 'Domicilio',
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
		$criteria->compare('sociedad_id',$this->sociedad_id);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('domicilio',$this->domicilio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ConsejoSociedad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
