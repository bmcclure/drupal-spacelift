import React from 'react';

import HorizontalCard from './HorizontalCard.twig';

import HorizontalCardData from './HorizontalCard.yml';

/**
 * Storybook Definition.
 */

export default { title: 'Molecules/Horizontal-Card' };


export const HorizontalCardExample = () => (
  <div dangerouslySetInnerHTML={{ __html: HorizontalCard(HorizontalCardData) }}
  />
);
