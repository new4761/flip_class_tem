import VuexORM from '@vuex-orm/core';
import database from '~/database/data';

export default ({ store }) => {
  VuexORM.install(database)(store);
};
