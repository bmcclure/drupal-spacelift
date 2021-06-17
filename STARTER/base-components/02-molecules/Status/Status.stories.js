import React from 'react';

import Status from './Status.twig';

import StatusData from './Status.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Status' };

export const statuses = () => (
  <div dangerouslySetInnerHTML={{ __html: Status(StatusData) }} />
);
