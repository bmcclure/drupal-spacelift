import React from 'react';

import TitleBar from './_title-bar.twig';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Foundation Title Bar' };

export const titleBar = () => (
  <div dangerouslySetInnerHTML={{ __html: TitleBar({}) }} />
);
