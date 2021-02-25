import React from 'react';

import angledBackground from './angled-background.twig';

/**
 * Add storybook definition for angled backgrounds
 */
export default {title: 'Atoms/Angled Background'};

export const Usage = () => (
  <div dangerouslySetInnerHTML={{__html: angledBackground}}/>
);
