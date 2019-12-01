class Schedule {
  static find(id) {
    return axios.get('/schedules/' + id);
  }
  static all(then) {
    return axios.get('/schedules')
                .then(({data}) => then(data));
  }
}

export default Schedule;
