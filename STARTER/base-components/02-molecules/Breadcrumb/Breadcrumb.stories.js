import React from 'react';

import Breadcrumb from './Breadcrumb.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Breadcrumb' };

export const breadcrumb = () => (
  <div dangerouslySetInnerHTML={{ __html: Breadcrumb() }} />
);
