import React from 'react';

import LinkButton from './LinkButton.twig';

import LinkButtonData from './LinkButton.yml';

import LinkButtonDataAlt from './LinkButton--link.yml';

/**
 * Add storybook definition for lines
 */
export default { title: 'Atoms/Buttons/Link Button' };

export const linkButton = () => (
  <div dangerouslySetInnerHTML={{ __html: LinkButton(LinkButtonData) }} />
);

export const altLinkButton = () => (
  <div dangerouslySetInnerHTML={{ __html: LinkButton(LinkButtonDataAlt) }} />
);
