import React from 'react';

import HorizontalCard from './HorizontalCard.twig';

import HorizontalCardData from './HorizontalCard.yml';
import HorizontalCardAltData from './HorizontalCard--alt.yml';
import JobPostTeaser from './HorizontalCard--JobPostTeaser.yml';

/**
 * Storybook Definition.
 */

export default { title: 'Molecules/Horizontal Card' };

export const HorizontalCardExample = () => (
  <div
    dangerouslySetInnerHTML={{ __html: HorizontalCard(HorizontalCardData) }}
  />
);

export const HorizontalCardAltExample = () => (
  <div
    dangerouslySetInnerHTML={{ __html: HorizontalCard(HorizontalCardAltData) }}
  />
);

export const JobPostTeaserExample = () => (
  <div dangerouslySetInnerHTML={{ __html: HorizontalCard(JobPostTeaser) }} />
);
