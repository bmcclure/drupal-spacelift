import React from 'react';

import Tabs from './Tabs.twig';

import TabData from './Tabs.yml';

import './Tabs';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Tabs' };

export const JSTabs = () => (
  <div dangerouslySetInnerHTML={{ __html: Tabs(TabData) }} />
);
