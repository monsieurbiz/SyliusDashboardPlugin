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

namespace MonsieurBiz\SyliusDashboardPlugin\Form\Type\UiElement;

use MonsieurBiz\SyliusDashboardPlugin\Form\Type\UiElement\MenuButtonCollection\MenuButtonItemType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

final class MenuButtonsType extends AbstractType
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('items', CollectionType::class, [
                'label' => 'monsieurbiz.dashboard.ui_elements.menu_buttons.field.items',
                'required' => true,
                'entry_type' => MenuButtonItemType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'delete_empty' => true,
                'constraints' => [
                    new Assert\Valid(),
                    new Assert\Count(['min' => 1]),
                ],
            ])
        ;
    }
}
