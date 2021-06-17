import React from 'react';

import Breadcrumbs from './Breadcrumbs.twig';

import BreadcrumbsData from './Breadcrumbs.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Breadcrumbs' };

export const breadcrumbs = () => (
  <div dangerouslySetInnerHTML={{ __html: Breadcrumbs(BreadcrumbsData) }} />
);
