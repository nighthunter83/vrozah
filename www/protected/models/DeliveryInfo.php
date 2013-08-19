<?php

/**
 * This is the model class for table "{{delivery_info}}".
 *
 * The followings are the available columns in table '{{delivery_info}}':
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property integer $address_type
 * @property string $street
 * @property string $house
 * @property string $body
 * @property string $structure
 * @property string $porch
 * @property string $floor
 * @property string $subway
 * @property string $company_name
 * @property string $additional_info
 */
class DeliveryInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{delivery_info}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('address_type', 'numerical', 'integerOnly'=>true),
			array('name, phone, street, house, body, structure, porch, floor, subway, company_name, additional_info', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, phone, address_type, street, house, body, structure, porch, floor, subway, company_name, additional_info', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'phone' => 'Phone',
			'address_type' => 'Address Type',
			'street' => 'Street',
			'house' => 'House',
			'body' => 'Body',
			'structure' => 'Structure',
			'porch' => 'Porch',
			'floor' => 'Floor',
			'subway' => 'Subway',
			'company_name' => 'Company Name',
			'additional_info' => 'Additional Info',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('address_type',$this->address_type);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('house',$this->house,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('structure',$this->structure,true);
		$criteria->compare('porch',$this->porch,true);
		$criteria->compare('floor',$this->floor,true);
		$criteria->compare('subway',$this->subway,true);
		$criteria->compare('company_name',$this->company_name,true);
		$criteria->compare('additional_info',$this->additional_info,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DeliveryInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
