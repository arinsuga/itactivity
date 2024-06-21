create or replace view activity_view as
select a.id,
CAST(a.created_at as DATE) as activity_dt,
YEAR(a.created_at) as activity_year,
MONTH(a.created_at) as activity_month,
CAST(CONCAT(CAST(YEAR(a.created_at) as CHAR), LPAD(MONTH(a.created_at), 2, 0)) AS UNSIGNED) as activity_yearmonth,
a.created_by, b.name as created_byname,
a.activitytype_id, a1.name as activitytype_name,
a.activitysubtype_id, a2.name as activitysubtype_name,
a.activitystatus_id,
a.tasktype_id, a3.name as tasktype_name,
a.tasksubtype1_id, a4.name as tasksubtype1_name,
a.tasksubtype2_id, a5.name as tasksubtype2_name,
/* SUPPORT */
IF(a.activitytype_id = 1,
  IF(a.activitysubtype_id = 1,
      IF(a.activitystatus_id = 1, 1, 0), 0), 0) as support_request_open,
IF(a.activitytype_id = 1,
  IF(a.activitysubtype_id = 2,
      IF(a.activitystatus_id = 1, 1, 0), 0), 0) as support_incident_open,
/* SUPPORT REQUEST + INCIDENT */
IF(a.activitytype_id = 1,
  IF(a.activitysubtype_id = 1, 1, 0), 0) as support_request,
IF(a.activitytype_id = 1,
  IF(a.activitysubtype_id = 2, 1, 0), 0) as support_incident,
/* SUPPORT PENDING */
/* SUPPORT REQUEST + INCIDENT */
IF(a.activitytype_id = 1,
  IF(a.activitystatus_id = 3, 1, 0), 0) as support_pending,
/* SUPPORT ALL */
IF(a.activitytype_id = 1, 1, 0) as support_all
from activity a
left outer join activitytype a1 on a.activitytype_id = a1.id
left outer join activitysubtype a2 on a.activitysubtype_id = a2.id
left outer join tasktype a3 on a.tasktype_id = a3.id
left outer join tasksubtype1 a4 on a.tasksubtype1_id = a4.id
left outer join tasksubtype2 a5 on a.tasksubtype2_id = a5.id
, users b
where a.created_by = b.id;
