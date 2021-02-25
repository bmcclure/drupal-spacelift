import React from 'react';

import buttonLink from './button-link.twig';

import buttonLinkData from './button-link.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Button Links' };

export const links = () => (
  <div dangerouslySetInnerHTML={{ __html: buttonLink(buttonLinkData) }} />
);
