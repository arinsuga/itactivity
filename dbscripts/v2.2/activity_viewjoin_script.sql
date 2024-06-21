create or replace view activity_viewjoin as
select
a.id,
a.activitytype_id,
a.activitysubtype_id,
a.activitystatus_id,
a.tasktype_id,
a.tasksubtype1_id,
a.tasksubtype2_id,
a.name, a.subject, a.description, a.resolution, a.image,
a.startdt, a.enddt, a.targetdt,
a.enduser_id,
a.enduserdept_id,
a.endusersubdept_id,
a.technician_id,
a.created_at, a.updated_at,
a.created_by, a.updated_by,
b1.name as activitytype_name,
b2.name as activitysubtype_name,
b6.name as activitystatus_name,
b3.name as tasktype_name,
b4.name as tasksubtype1_name,
b5.name as tasksubtype2_name,
c1.name as enduser_name, c1.email as enduser_email,
c2.name as enduserdept_name, c2.email as enduserdept_email,
c3.name as endusersubdept_name, c3.email as endusersubdept_email,
c4.name as technician_name, c4.email as technician_email,
c5.name as createdby_name, c5.email as createdby_email,
c6.name as updatedby_name, c6.email as updatedby_email
from activity a
left outer join activitytype b1 on a.activitytype_id = b1.id
left outer join activitysubtype b2 on a.activitysubtype_id = b2.id
left outer join tasktype b3 on a.tasktype_id = b3.id
left outer join tasksubtype1 b4 on a.tasksubtype1_id = b4.id
left outer join tasksubtype2 b5 on a.tasksubtype2_id = b5.id
left outer join activitystatus b6 on a.activitystatus_id = b6.id
left outer join users c1 on a.enduser_id = c1.id
left outer join users c2 on a.enduserdept_id = c2.id
left outer join users c3 on a.endusersubdept_id = c3.id
left outer join users c4 on a.technician_id = c4.id
left outer join users c5 on a.created_by = c5.id
left outer join users c6 on a.updated_by = c6.id;
