import React from 'react';

import LinkButton from './LinkButton.twig';

import LinkButtonData from './LinkButton.yml';

import LinkButtonDataAlt from './LinkButton--link.yml';

/**
 * Add storybook definition for lines
 */
export default { title: 'Atoms/LinkButton' };

export const LinkButtonExample = () => (
  <div dangerouslySetInnerHTML={{ __html: LinkButton(LinkButtonData) }} />
);

export const altLinkButtonExample = () => (
  <div dangerouslySetInnerHTML={{ __html: LinkButton(LinkButtonDataAlt) }} />
);
