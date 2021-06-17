import React from 'react';

import Breadcrumbs from '../Breadcrumbs/Breadcrumbs.twig';
import InlineMenu from './Inline/InlineMenu.twig';
import MainMenu from './MainMenu/MainMenu.twig';
import SocialLinks from '../SocialLinks/SocialLinks.twig';

import BreadcrumbsData from '../Breadcrumbs/Breadcrumbs.yml';
import InlineMenuData from './Inline/InlineMenu.yml';
import MainMenuData from './MainMenu/MainMenu.yml';
import SocialLinksData from '../SocialLinks/SocialLinks.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Menu' };

export const breadcrumbs = () => (
  <div dangerouslySetInnerHTML={{ __html: Breadcrumbs(BreadcrumbsData) }} />
);

export const inlineMenu = () => (
  <div dangerouslySetInnerHTML={{ __html: InlineMenu(InlineMenuData) }} />
);

export const mainMenu = () => (
  <div dangerouslySetInnerHTML={{ __html: MainMenu(MainMenuData) }} />
);

export const socialLinks = () => (
  <div dangerouslySetInnerHTML={{ __html: SocialLinks(SocialLinksData) }} />
);
