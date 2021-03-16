import React from 'react';

import Breadcrumb from './Breadcrumb.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Breadcrumb' };

export const BreadcrumbExample = () => (
  <div dangerouslySetInnerHTML={{ __html: Breadcrumb() }} />
);
