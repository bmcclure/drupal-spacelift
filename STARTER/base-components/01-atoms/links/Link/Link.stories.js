import React from 'react';

import Link from './Link.twig';

import LinkData from './Link.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Atoms/Links' };

export const link = () => (
  <div dangerouslySetInnerHTML={{ __html: Link(LinkData) }} />
);
