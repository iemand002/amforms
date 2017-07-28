<?php
/**
 * Form manager for Craft.
 *
 * @author    a&m impact
 * @copyright Copyright (c) 2017 a&m impact
 * @link      http://www.am-impact.nl
 */

namespace amimpact\formmanager\controllers;

use amimpact\formmanager\FormManager;

use Craft;
use craft\web\Controller;
use craft\web\View;

use yii\web\Response;

class FormsController extends Controller
{
    /**
     * Called when a user brings up a form for editing before being displayed.
     *
     * @param int|null $formId The form's ID, if editing an existing form.
     *
     * @return Response
     */
    public function actionEdit(int $formId = null): Response
    {
        return $this->renderTemplate('form-manager/forms/_edit', []);
    }
}