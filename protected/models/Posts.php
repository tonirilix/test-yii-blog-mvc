<?php

/**
 * This is the model class for table "posts".
 *
 * The followings are the available columns in table 'posts':
 * @property integer $id
 * @property string $title
 * @property string $summary
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user_id
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class Posts extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'posts';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title', 'required'),
            array('user_id', 'numerical', 'integerOnly' => true),
            array('title', 'length', 'max' => 255),
            array('summary, content, created_at, updated_at', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, summary, content, created_at, updated_at, user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
            'postTags' => array(self::HAS_MANY, 'PostTag', 'post_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'summary' => 'Summary',
            'content' => 'Content',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_id' => 'User',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('summary', $this->summary, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('created_at', $this->created_at, true);
        $criteria->compare('updated_at', $this->updated_at, true);
        $criteria->compare('user_id', $this->user_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Posts the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * 
     * @return type
     */
    public function behaviors() {
        return array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'created_at',
                'updateAttribute' => 'updated_at',
                'setUpdateOnCreate' => true,
            ),
            'BlameableBehavior' => array(
                'class' => 'application.components.behaviors.BlameableBehavior',
                'createdByColumn' => 'user_id',
//                'updatedByColumn' => 'modificado_por',
            ),
        );
    }

    public function obtenerPosts($tag = null) {
        $criteria = new CDbCriteria(array(
            'order' => 'created_at DESC'
        ));


        if ($tag !== null) {
            $criteria->with = array(
                'postTags' => array('alias' => 't1', 'together' => true,),
            );
            $tags_ids = Tags::model()->obtenerTagsModelsIds($tag);
            $criteria->addInCondition('t1.tag_id', $tags_ids);
        }

        $dataProvider = new CActiveDataProvider('Posts', array(
            'pagination' => array(
                'pageSize' => Yii::app()->params['postsPorPagina'],
            ),
            'criteria' => $criteria,
        ));
        return $dataProvider;
    }

    /**
     * Obtiene 
     * @return string
     */
    public function obtenerFechaCreacionFormateada() {
        return date('F j, Y', strtotime($this->created_at));
    }

    /**
     * 
     * @return type
     */
    public function getUrl() {
        return Yii::app()->createUrl('posts/view', array(
                    'id' => $this->id,
                    'title' => $this->title,
        ));
    }

}
