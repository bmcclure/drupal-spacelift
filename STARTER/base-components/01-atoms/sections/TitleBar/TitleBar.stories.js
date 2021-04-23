import React from 'react';

import TitleBar from './TitleBar.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Sections/Foundation Title Bar' };

export const foundationTitleBar = () => (
  <div dangerouslySetInnerHTML={{ __html: TitleBar({}) }} />
);
