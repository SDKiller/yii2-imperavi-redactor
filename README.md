Imperavi Redactor Widget for Yii2
=================================

This is a Yii2 port of original [Imperavi Redactor Widget](https://github.com/yiiext/imperavi-redactor-widget) for Yii (yiiext/imperavi-redactor-widget).

`ImperaviRedactorWidget` is a wrapper for [Imperavi Redactor](http://imperavi.com/redactor/),
a high quality WYSIWYG editor.

Note that Imperavi Redactor itself is a proprietary commercial copyrighted software
but since Yii community bought OEM license you can use it for free with Yii.


Installation
------------

```
composer.phar require --prefer-dist zyx/yii2-imperavi-redactor "*"
```

TBD


Usage
-----

TBD

For more options see [Imperavi Redactor documentation](http://imperavi.com/redactor/docs/)

```
    echo $form->field($model, 'content')->widget(
        Redactor::className(), [
            'options' => [
                'style' => 'height: 300px;'
            ],
            'clientOptions' => [
                'lang'              => 'ru',
                'observeLinks'      => true,
                'convertVideoLinks' => true,
                'autoresize'        => true,
                'placeholder'       => Yii::t('app', 'Redactor placeholder text'),
                'plugins'           => ['fontcolor', 'fontfamily', 'fontsize'],
                'buttons'           => ['html', 'formatting', 'bold', 'italic', 'deleted', 'underline', 'horizontalrule',
                                        'alignment', 'unorderedlist', 'orderedlist', 'outdent', 'indent',
                                        'table', 'link', 'image', 'video', 'file'],
                'imageUpload'       => Yii::$app->urlManager->createUrl(['news/upload']),
            ],
        ]
    );
```
