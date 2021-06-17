import React from 'react';

import Article from './article.twig';

import MainMenuData from '../../02-molecules/Menu/MainMenu/MainMenu.yml';
import BreadcrumbsData from '../../02-molecules/Breadcrumbs/Breadcrumbs.yml';
import SocialLinksData from '../../02-molecules/SocialLinks/SocialLinks.yml';
import FooterMenuData from '../../02-molecules/Menu/Inline/InlineMenu.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Pages/Content Types' };

export const article = () => (
  <div
    dangerouslySetInnerHTML={{
      __html: Article({
        page_layout_modifier: 'contained',
        ...MainMenuData,
        ...BreadcrumbsData,
        ...SocialLinksData,
        ...FooterMenuData,
        card__link__text: 'Click here',
      }),
    }}
  />
);
