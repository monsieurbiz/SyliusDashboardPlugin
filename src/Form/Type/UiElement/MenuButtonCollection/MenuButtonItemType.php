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

namespace MonsieurBiz\SyliusDashboardPlugin\Form\Type\UiElement\MenuButtonCollection;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

final class MenuButtonItemType extends AbstractType
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('label', TextType::class, [
                'label' => 'monsieurbiz.dashboard.ui_elements.menu_button.field.label',
                'required' => true,
                'constraints' => [
                    new Assert\Length(['min' => 2, 'max' => 255]),
                    new Assert\NotBlank(),
                ],
            ])
            ->add('route', TextType::class, [
                'label' => 'monsieurbiz.dashboard.ui_elements.menu_button.field.route',
                'help' => 'monsieurbiz.dashboard.ui_elements.menu_button.field.route_help',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('icon', TextType::class, [
                'label' => 'monsieurbiz.dashboard.ui_elements.menu_button.field.icon',
                'help' => 'monsieurbiz.dashboard.ui_elements.menu_button.field.icon_help',
                'help_html' => true,
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
        ;
    }
}
