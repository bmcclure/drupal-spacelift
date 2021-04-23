import React from 'react';

import ContentBox from './ContentBox.twig';

import ContentBoxData from './ContentBox.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Content Box' };

export const contentBox = () => (
  <div dangerouslySetInnerHTML={{ __html: ContentBox(ContentBoxData) }} />
);
