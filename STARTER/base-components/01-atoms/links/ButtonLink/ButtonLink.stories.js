import React from 'react';

import ButtonLink from './ButtonLink.twig';

import ButtonLinkData from './ButtonLink.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Links/Button Link' };

export const buttonLink = () => (
  <div dangerouslySetInnerHTML={{ __html: ButtonLink(ButtonLinkData) }} />
);
