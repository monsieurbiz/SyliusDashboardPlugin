<?php

/*
 * This file is part of Monsieur Biz' Dashboard plugin for Sylius.
 *
 * (c) Monsieur Biz <sylius@monsieurbiz.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace MonsieurBiz\SyliusDashboardPlugin\Form\Settings;

use MonsieurBiz\SyliusRichEditorPlugin\Form\Type\RichEditorType;
use MonsieurBiz\SyliusSettingsPlugin\Form\AbstractSettingsType;
use MonsieurBiz\SyliusSettingsPlugin\Form\SettingsTypeInterface;
use Symfony\Component\Form\FormBuilderInterface;

final class DashboardSettingsType extends AbstractSettingsType implements SettingsTypeInterface
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->addWithDefaultCheckbox(
            $builder,
            'dashboardPage',
            RichEditorType::class,
            [
                'label' => 'monsieurbiz.dashboard.settings.dashboard_page',
                'required' => false,
                'tags' => ['mbiz_dashboard_admin'],
            ]
        );
    }
}
